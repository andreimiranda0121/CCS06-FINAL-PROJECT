// Get the delete button and modal
const deleteBtn = document.getElementById("deleteBtn");
const deleteModal = document.getElementById("deleteModal");

// Open the modal when delete button is clicked
deleteBtn.addEventListener("click", () => {
  deleteModal.style.display = "block";
});

// Close the modal when the close button or outside the modal is clicked
deleteModal.addEventListener("click", (event) => {
  if (
    event.target.classList.contains("close") ||
    event.target === deleteModal
  ) {
    deleteModal.style.display = "none";
  }
});

// Perform delete action when the delete button in the modal is clicked
const deleteConfirmBtn = document.querySelector(".delete");
deleteConfirmBtn.addEventListener("click", () => {
  // Perform delete action here
  console.log("Product deleted");
  
  // Close the modal
  deleteModal.style.display = "none";
});
