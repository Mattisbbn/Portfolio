const journeyButtons = document.querySelectorAll(".journeyButtons");

journeyButtons.forEach((button, index) => {
    button.addEventListener("click", function () {
        changeJourneyButtonColor(index); 
    });
});

function changeJourneyButtonColor(buttonId) {
    journeyButtons.forEach(element => {
        element.style.color = "#6A737C";
    });

    journeyButtons[buttonId].style.color = "#579CE0"; 
}
changeJourneyButtonColor(0); 