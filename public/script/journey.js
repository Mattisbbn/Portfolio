const journeyButtons = document.querySelectorAll(".journeyButtons");
const journeyContainers = document.querySelectorAll(".journeyContainers")

journeyButtons.forEach((button, index) => {
    button.addEventListener("click", function () {
        changeJourneyButtonColor(index); 
        displayContainer(index)
    });
});

function changeJourneyButtonColor(buttonId) {
    journeyButtons.forEach(element => {
        element.style.color = "#6A737C";
    });

    journeyButtons[buttonId].style.color = "#579CE0"; 
}

function displayContainer(index){
    journeyContainers.forEach(container => {
        container.classList.add("d-none")
    });

    journeyContainers[index].classList.remove("d-none")
}