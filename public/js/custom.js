
function deletePost(postId) {
    var result = confirm("Are you sure you want to delete this post?");
    if (result) {
        document.getElementById('delete-form-' + postId).submit();
    }
}
