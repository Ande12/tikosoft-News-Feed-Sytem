const popForm = document.getElementById('popForm'),
displayFormBlog= document.getElementById('displayFormBlog');

popForm.style.display = 'none';

displayFormBlog.addEventListener('click', function(){
    popForm.style.display = 'block'
})