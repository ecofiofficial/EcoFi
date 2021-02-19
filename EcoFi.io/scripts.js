// ########################## MOBILE NAV - CONTACT MODAL

    const mButton = document.getElementById("navButton"); // Mobile NAV button
    const fButton = document.getElementById("fButton"); // Mobile NAV button

    function navButton() { // Function to toggle open/close the mobile navigation with its button menu
        mButton.classList.toggle("opened"); 
        document.body.classList.toggle("open_nav"); 
    }
    mButton.addEventListener("click", navButton);

    function ffButton() { // Function to toggle open/close the mobile navigation with its button menu
        document.body.classList.toggle("open_form"); 
    }
    fButton.addEventListener("click", ffButton);

    function navButtonClose() { // Function to close mobile nav and button to close through modal interaction
        mButton.classList.remove("opened"); // tell mobile NAV button to close if open
        document.body.classList.remove("open_nav"); // tell mobile NAV to close if open
    }