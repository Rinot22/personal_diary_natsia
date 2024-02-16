document.addEventListener('DOMContentLoaded', async () =>
{
    await GetData();
});

async function GetData()
{
    try
    {
        let data = await DownloadJsonData("/public/json/article.json");
        ParseArticles(data);
    } catch (error)
    {

    }
}

function ParseArticles(parsedData) {
    const articleView = document.querySelector('#article-view')
        const title = articleView.querySelector('.title');
        const subContent = articleView.querySelector('.sub-content');
        const content = articleView.querySelector('.content');

        const articleData = parsedData[0];

        title.innerHTML = articleData.title;
        subContent.innerHTML = articleData.subcontent;
        content.innerHTML = articleData.content;
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
