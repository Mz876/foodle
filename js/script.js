
// For Toggle Button
document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("toggle-btn");
    const sidebar = document.getElementById("sidebar");
    const mainContent = document.getElementById("main-content");

    toggleBtn.addEventListener("click", () => {
        sidebar.classList.toggle("show");
        toggleBtn.classList.toggle("show");
    });
});
