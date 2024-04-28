<script>
  let popup = document.querySelector(".popup");
  let closePopup = document.querySelector(".popup-close");

if (popup) {
  window.addEventListener("load", () => {
    setTimeout(() => {
        popup.classList.add("show");
    }, 10000);
  });

  closePopup.addEventListener("click", () => {
    popup.classList.remove("show");
  });

}
</script>


<script src="./js/bootstrap.min.js"></script>
</body>
</html>