document.addEventListener('DOMContentLoaded', async () =>
{

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

function OnAdminClicked()
{
    alert("Admin clicked");
}

function OnLogoutClicked()
{
    alert("Logout clicked");
}

function OnAddArticleClicked()
{
    modal = document.querySelector("#add-article-dialog");
    modal.showModal();
}

function OnDeleteArticleClicked()
{
    modal = document.querySelector("#delete-article-dialog");
    modal.showModal();
}

function OnDeleteUserClicked()
{
    modal = document.querySelector("#delete-user-dialog");
    modal.showModal();
}