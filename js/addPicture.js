// addPicture.js
$(document).ready(function() {
    const fileDropArea = document.getElementById('fileDropArea');
    const fileList = document.querySelector('#fileList ul');
    const uploadBtn = document.getElementById('uploadBtn');
    const fileInput = document.getElementById('fileInput');

    fileDropArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        fileDropArea.classList.add('highlight');
    });

    fileDropArea.addEventListener('dragleave', () => {
        fileDropArea.classList.remove('highlight');
    });

    fileDropArea.addEventListener('drop', (e) => {
        e.preventDefault();
        fileDropArea.classList.remove('highlight');
        const files = e.dataTransfer.files;
        handleFiles(files);
    });

    fileInput.addEventListener('change', (e) => {
        const files = e.target.files;
        handleFiles(files);
    });

    function handleFiles(files) {
        Array.from(files).forEach(file => {
            const li = document.createElement('li');
            const fileExtension = file.name.split('.').pop().toLowerCase();
            let filePreview = '';
            if (file.type.startsWith('image/') || ['jpg', 'jpeg', 'png', 'gif'].includes(
                    fileExtension)) {
                filePreview =
                    `<img class="file-preview" src="${URL.createObjectURL(file)}" alt="Preview">`;
            } else {
                filePreview = '<i class="fas fa-file-alt file-preview"></i>';
            }
            li.innerHTML = `
                        ${filePreview}
                        <span>${file.name}</span>
                        <span class="remove-btn"><i class="fas fa-times"></i></span>
                    `;
            fileList.appendChild(li);
            li.querySelector('.remove-btn').addEventListener('click', () => {
                fileList.removeChild(li);
                if (fileList.children.length === 0) {
                    uploadBtn.style.display = 'none';
                }
            });
        });
        if (files.length > 0) {
            uploadBtn.style.display = 'block';
        }
    }

    uploadBtn.addEventListener('click', () => {
        const files = document.querySelectorAll('#fileList ul li');
        const formData = new FormData();
        files.forEach(file => {
            formData.append('files[]', file.innerText);
        });
        // Perform AJAX upload or form submission with formData
        // Example: $.post('upload.php', formData, function(response) {...});
        // After successful upload, clear the file list
        fileList.innerHTML = '';
        uploadBtn.style.display = 'none';
    });
});