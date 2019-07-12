function like(countryId) {
    if (localStorage.getItem("Ranking")) {
        localStorage.getItem("Ranking").push(countryId);
    } else {
        localStorage.setItem("Ranking", Array());
    }
}
