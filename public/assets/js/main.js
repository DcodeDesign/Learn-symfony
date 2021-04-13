var exampleModal = document.getElementById('modalDeleteUser')
exampleModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget
    var id = button.getAttribute('data-bs-id')
    var fullName = button.getAttribute('data-bs-nom') + ' ' + button.getAttribute('data-bs-prenom')
    var url = button.getAttribute('data-bs-url')

    var modalTitle = exampleModal.querySelector('#recipient-id')
    var modalBodyFullName = exampleModal.querySelector('.modal-body #recipient-fullName')
    var actionDeleteUser =  exampleModal.querySelector('a.actionDeleteUser')

    actionDeleteUser.href = url;
    modalTitle.textContent = id
    modalBodyFullName.textContent = fullName
})