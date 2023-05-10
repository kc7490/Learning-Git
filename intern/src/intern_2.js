let Car = {
    name: "My Car",
    brand: "Toyota",
    make: 2023,
    size: "Medium",
    getCurrentValuation: function() {
        return this.make * 1000;
    },
    displayCarInfo: function() {
        document.getElementById("name").innerHTML = this.name;
        document.getElementById("brand").innerHTML = this.brand;
        document.getElementById("make").innerHTML = this.make;
        document.getElementById("size").innerHTML = this.size;
        document.getElementById("valuation").innerHTML = this.getCurrentValuation();
    },
    paintCar: function(color) {
        console.log(`Painting ${this.name} ${color}`);
    }
};


Car.displayCarInfo();


