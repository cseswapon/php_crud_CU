const editModal = document.getElementById("editModal");
editModal.addEventListener("show.bs.modal", function (event) {
  const button = event.relatedTarget;
  const studentId = button.getAttribute("data-id");
  const studentName = button.getAttribute("data-name");
  const studentAddress = button.getAttribute("data-address");
  const studentPhone = button.getAttribute("data-phone");

  document.getElementById("editId").value = studentId;
  document.getElementById("editName").value = studentName;
  document.getElementById("editAddress").value = studentAddress;
  document.getElementById("editPhone").value = studentPhone;
});

const deleteModal = document.getElementById("deleteModal");
deleteModal.addEventListener("show.bs.modal", function (event) {
  const button = event.relatedTarget;
  const studentId = button.getAttribute("data-id");
  const modalInput = deleteModal.querySelector("#deleteId");
  modalInput.value = studentId;
});
