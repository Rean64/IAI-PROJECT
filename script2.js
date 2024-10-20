window.onload = function() {
    const toasts = document.querySelectorAll(".toasts");

    toasts.forEach((toast) => {
        const closeIcon = toast.querySelector(".close");
        const progress = toast.querySelector(".progress");

        // Show toast
        toast.classList.add("active");
        progress.classList.add("active");

        // Hide toast after 10 seconds
        setTimeout(() => {
            toast.classList.remove("active");
            progress.classList.remove("active");
        }, 10000);

        // Close toast manually
        if (closeIcon) {
            closeIcon.addEventListener("click", () => {
                console.log("Close icon clicked!"); // Check if this logs
                toast.classList.remove("active");
                progress.classList.remove("active");
            });
        }
        
    });
};
