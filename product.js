// product page starts
// Function to display the image when hovered over a thumbnail
function displayImage(imageUrl) {
    document.getElementById('mainImage').src = imageUrl;
}
// Function to update the selected quantity
function updateQuantity() {
    var select = document.getElementById('quantityDropdown');
    var selectedQuantity = document.getElementById('selectedQuantity');
    selectedQuantity.textContent = select.value;
}
// Set the initial main image when the page loads
window.onload = function() {
    var firstThumbnail = document.querySelector('.thumbnail');
    var mainImage = document.getElementById('mainImage');
    mainImage.src = firstThumbnail.src; // Set the main image source to the first thumbnail's source
};
function updateQuantity() {
    var select = document.getElementById('quantityDropdown');
    var selectedQuantity = document.getElementById('selectedQuantity');
    selectedQuantity.textContent = select.value;
}
// product page ends