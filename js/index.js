



var searchFilter = () => {
    let selectedCategory = document.getElementById("filterByCategory").value;
   
    const input = document.querySelector(".form-control");
    const cards = document.getElementsByClassName("col-4");

    let textBox = input.value;
    for (let i = 0; i < cards.length; i++) {
        let title = cards[i].querySelector(".card-body");
        if ((cards[i].classList.contains(selectedCategory) || selectedCategory=="") && title.innerText.toLowerCase().indexOf(textBox.toLowerCase()) > -1) {
            cards[i].classList.remove("d-none");
        } else {
            cards[i].classList.add("d-none");
        }
    }
}

