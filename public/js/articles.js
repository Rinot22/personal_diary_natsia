let scroll_data = [];
let prefab_elem = null;
let scroll_content_elem = null;
let scroll_elems = [];

document.addEventListener('DOMContentLoaded', async () =>
{
    await GetScrollData();
    InitScroll();

    CheckScrollPosition(true);
});

function OnArticlesClicked()
{
    alert("Articles clicked");
}

function OnCalendarClicked()
{
    alert("Calendar clicked");
}

function OnHistoryClicked()
{
    alert("History Clicked");
}

function OnLogoutClicked()
{
    alert("Logout clicked");
}

function OnArticleClicked(url){
    alert(`Article ${url} was clicked`);
}

async function GetScrollData()
{
    try
    {
        let data = await DownloadJsonData("/public/json/articles.json");
        ParseArticles(data);
    } catch (error)
    {

    }
}

function ParseArticles(parsedData) {
    const articlePanel = document.querySelector('#article-panel');

    const article = document.querySelector(".article");
    parsedData.map((item)=> {
        const cloneArticle = article.cloneNode(true);
        const title = cloneArticle.querySelector('.title');
        const subContent = cloneArticle.querySelector('.subcontent');
        const articleLink = cloneArticle.querySelector('.article-link')

        title.innerHTML = item.title;
        subContent.innerHTML = item.subcontent;
        articleLink.href = `article/${item.id}`;
        articlePanel.appendChild(cloneArticle);
    });
}

function CheckScrollPosition(forcedAdd = false)
{
    const { scrollTop, scrollHeight, clientHeight } = document.documentElement;

    if (forcedAdd || (scrollHeight <= clientHeight + scrollTop + 10))
    {
        if (AddElements(5))
        {
            CheckScrollPosition();
        }
    }
}

function AddElements(count)
{
    if (prefab_elem == null)
    {
        prefab_elem = document.querySelector("#article-panel .article");
        prefab_elem.style.display = "none";
    }

    let elemIndex = scroll_elems.length;


    for (let i = 0; i < count; i++)
    {
        let nextElemIndex = elemIndex + i;

        if (nextElemIndex >= scroll_data.length)
        {
            return false;
        }

        let elem = prefab_elem.cloneNode(true);
        scroll_elems.push(elem);
        scroll_content_elem.appendChild(elem);


        elem.style.display = "inline-flex";

        let bd = scroll_data[nextElemIndex];

        SetScrollElementData(elem, bd);
    }

    return scroll_elems.length < scroll_data.length;
}

function SetScrollElementData(elem, data)
{

    let title = elem.querySelector(".title");
    let subcontent = elem.querySelector(".subcontent");
    let img_elem_small = elem.querySelector(".small");
    let img_elem_large = elem.querySelector(".large");
    let img_elem_mobile = elem.querySelector(".mobile");

    title.textContent = data.title;
    subcontent.textContent = data.subcontent;
    img_elem_small.src = data.img_url_small;
    img_elem_large.src = data.img_url_large;
    img_elem_mobile.src = data.img_url_mobile;
    
    elem.addEventListener("click", ()=> OnArticleClicked(data.url));
}

function InitScroll()
{
    scroll_content_elem = document.querySelector("#article-panel");

    window.addEventListener("scroll", () => {CheckScrollPosition();});
    window.addEventListener("resize", () => {CheckScrollPosition();});
}

async function DownloadJsonData(url)
{
    try
    {
        const response = await fetch(url);


        if (!response.ok)
        {
            throw new Error(`Failed to download ${url}. Status: ${response.status}`);
        }

        return await response.json();
    } catch (error)
    {
        console.error(`Error during download and parsing: ${error.message}`);
        throw error;
    }
}