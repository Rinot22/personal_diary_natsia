<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Activity History</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/admin_panel-style.css">
</head>

<body>
    <div id="root">
        <div id="control-panel">
            <div id="admin-label">ADMIN PANEL</div>
            <button id="btn-add-article" onclick="OnAddArticleClicked()">Add article</button>
            <button id="btn-delete-article" onclick="OnDeleteArticleClicked()">Delete article</button>
            <button id="btn-delete-user" onclick="OnDeleteUserClicked()">Delete User</button>
        </div>

        <dialog id="add-article-dialog">
            <form action="add-article" method="post" id="add-article-form">
            <label for="add-article-title">Title:</label><br>
            <input type="text" name="title" id="add-article-title"><br><br>
            <label for="add-article-subtitle">Subitle:</label><br>
            <textarea name="subtitle" id="add-article-subtitle" cols="30" rows="3"></textarea><br><br>
            <label for="add-article-subtitle">Text:</label><br>
            <textarea name="text" id="add-article-text" cols="30" rows="10"></textarea><br><br>
            <label for="add-article-subtitle">Image:</label><br>
            <input type="file" name="image" id="add-article-image"><br><br>
            <div class="footer">
                <button type="button" class="btn-cancel" onclick="document.querySelector('#add-article-dialog').close()">Cancel</button>
                <input type="submit" value="Submit">
            </div>            
            </form>
        </dialog>

        <dialog id="delete-article-dialog">
            <form action="delete-article" method="post" id="delete-article-form">
                <label for="delete-article-title">Title:</label><br>
                <input type="text" name="title" id="delete-article-title"><br><br>
                <div class="footer">
                    <button type="button" class="btn-cancel" onclick="document.querySelector('#delete-article-dialog').close()">Cancel</button>
                    <input type="submit" value="Submit">
                </div>            
                </form>
        </dialog>

        <dialog id="delete-user-dialog">
            <form action="delete-user" method="post" id="delete-user-form">
                <label for="delete-user-name">Username:</label><br>
                <input type="text" name="username" id="delete-user-name"><br><br>
                <div class="footer">
                    <button type="button" class="btn-cancel" onclick="document.querySelector('#delete-user-dialog').close()">Cancel</button>
                    <input type="submit" value="Submit">
                </div>            
                </form>
        </dialog>


    <script src="/public/js/admin_panel.js"></script>
</body>

</html>