// const { document } = require("postcss");

// Equipment Inventory
function totalHB() {
    const inputWHB = document.getElementById("inputWHB").value;
    const inputNonWHB = document.getElementById("inputNonWHB").value;
    const inputHBNonF = document.getElementById("inputHBNonF").value;
    const inputtotalBarangay = document.getElementById("inputtotalBarangay").value;

    const inputWHB_num = parseFloat(inputWHB);
    const inputNonWHB_num = parseFloat(inputNonWHB);
    const inputHBNonF_num = parseFloat(inputHBNonF);

  

    if (!isNaN(inputWHB_num) && !isNaN(inputNonWHB_num) && !isNaN(inputHBNonF_num)) {
        const sum = inputWHB_num + inputNonWHB_num;
        const difference = sum - inputHBNonF_num;

        var sums = document.getElementById("inputTotalHB").value = difference;
        console.log("sums:",sums);
    } else {
        document.getElementById("inputTotalHB").value = '';
    }

    availabilityHB(sums,inputtotalBarangay)
}
function availabilityHB(sums, inputtotalBarangay) {
    console.log("sums:",sums);
    console.log("inputtotalBarangay:",inputtotalBarangay);

    const availabilityHBquotient = sums / inputtotalBarangay;
    console.log("availabilityHBquotient:",availabilityHBquotient);

    const availabilityHBproduct = availabilityHBquotient * 100;
    console.log("availabilityHBproduct:",availabilityHBproduct);

    var avail = document.getElementById("inputHBpercent").value = availabilityHBproduct.toFixed(2);
    console.log("avail:",avail);
}

function totalWS() {
    const inputWSHanging = document.getElementById("inputWSHanging").value;
    const inputWSNonF = document.getElementById("inputWSNonF").value;
    const inputtotalBarangay = document.getElementById("inputtotalBarangay").value;

    const inputWSHanging_num = parseFloat(inputWSHanging);
    const inputWSNonF_num = parseFloat(inputWSNonF);

    if (!isNaN(inputWSHanging_num) && !isNaN(inputWSNonF_num)) {
        const difference = inputWSHanging_num - inputWSNonF_num;

        var totalWS = document.getElementById("inputTotalWS").value = difference;
        console.log("totalWS:", totalWS);
    } else {
        document.getElementById("inputTotalWS").value = '';
    }

    availabilityWS(totalWS, inputtotalBarangay);
}
function availabilityWS(totalWS, inputtotalBarangay) {
    const availabilityWSquotient = totalWS / inputtotalBarangay;
    const availabilityWSproduct = availabilityWSquotient * 100;

    var availWS = document.getElementById("inputWSpercent").value = availabilityWSproduct.toFixed(2);
    console.log("availWS:",availWS);
}

function muac_child() {
    const inputMChild = document.getElementById("inputMChild").value;
    const inputMNonFChild = document.getElementById("inputMNonFChild").value;
    const inputtotalBarangay = document.getElementById("inputtotalBarangay").value;

    const inputMChild_num = parseFloat(inputMChild);
    const inputMNonFChild_num = parseFloat(inputMNonFChild);

    if (!isNaN(inputMChild_num) && !isNaN(inputMNonFChild_num)) {
        const difference = inputMChild_num - inputMNonFChild_num;

        var totalChild = document.getElementById("inputTotalChild").value = difference;
        console.log("totalChild",totalChild);
    } else {
        document.getElementById("inputTotalChild").value = '';
    }

    availabilityChild(totalChild, inputtotalBarangay);
}
function availabilityChild(totalChild, inputtotalBarangay) {
    const availabilityChildquotient = totalChild / inputtotalBarangay;
    const availabilityChildproduct = availabilityChildquotient * 100;

    var avail_C = document.getElementById("inputChildpercent").value = availabilityChildproduct.toFixed(2);
    console.log("avail_C:",avail_C);
}

function muac_adult() {
    const inputMAdult = document.getElementById("inputMAdult").value;
    const inputMNonFAdult = document.getElementById("inputMNonFAdult").value;
    const inputtotalBarangay = document.getElementById("inputtotalBarangay").value;

    const inputMAdult_num = parseFloat(inputMAdult);
    const inputMNonFAdult_num = parseFloat(inputMNonFAdult);

    if (!isNaN(inputMAdult_num) && !isNaN(inputMNonFAdult_num)) {
        const difference = inputMAdult_num - inputMNonFAdult_num;

        var totalAdult = document.getElementById("inputTotalAdult").value = difference;
        console.log("totalAdult:",totalAdult);
    } else {
        document.getElementById("inputTotalAdult").value = '';
    }
    availabilityAdult(totalAdult, inputtotalBarangay);
}
function availabilityAdult(totalAdult, inputtotalBarangay) {
    const availabilityAdultquotient = totalAdult / inputtotalBarangay;
    const availabilityAdultproduct = availabilityAdultquotient * 100;

    var avail_A = document.getElementById("inputAdultpercent").value = availabilityAdultproduct.toFixed(2);
    console.log(avail_A);
}



// COMPUTE AVARAGE FOR Infant and Young Child Feeding
// function calculateAverage() {
//     const ratingSelects = document.querySelectorAll('.rating1');
//     let total = 0;
//     let count = 0;

//     ratingSelects.forEach(select => {
//         const rating = parseFloat(select.value);
//         if (!isNaN(rating)) {
//             total += rating;
//             count++;
//         }
//     });

//     const average = count ? (total / count).toFixed(2) : 0;
//     document.getElementById('young_child_feeding_average').textContent = average;
//     document.getElementById('young_child_feeding_average2').value = average;
// }

// document.addEventListener('DOMContentLoaded', () => {
//     const ratingSelects = document.querySelectorAll('.rating1');
//     ratingSelects.forEach(select => {
//         select.addEventListener('change', calculateAverage);
//     });
// });


function calculateAverage(className, averageTextId, averageInputId) {
    const ratingSelects = document.querySelectorAll(`.${className}`);
    let total = 0;
    let count = 0;

    ratingSelects.forEach(select => {
        const rating = parseFloat(select.value);
        if (!isNaN(rating)) {
            total += rating;
            count++;
        }
    });

    const average = count ? (total / count).toFixed(2) : 0;
    document.getElementById(averageTextId).textContent = average;
    document.getElementById(averageInputId).value = average;
}

document.addEventListener('DOMContentLoaded', () => {
    const setups = [
        { className: 'rating1', averageTextId: 'young_child_feeding_average', averageInputId: 'young_child_feeding_average2' },
        { className: 'rating2', averageTextId: 'acute_malnutrition_average', averageInputId: 'acute_malnutrition_average2' },
        { className: 'rating3', averageTextId: 'national_dietary_average', averageInputId: 'national_dietary_average2' },
        { className: 'rating4', averageTextId: 'behavioral_change_average', averageInputId: 'behavioral_change_average2' },
        { className: 'rating5', averageTextId: 'micro_supplement_average', averageInputId: 'micro_supplement_average2' },
        { className: 'rating6', averageTextId: 'mandatory_food_average', averageInputId: 'mandatory_food_average2' },
        { className: 'rating7', averageTextId: 'emergencies_program_average', averageInputId: 'emergencies_program_average2' },
        { className: 'rating8', averageTextId: 'prevention_program_average', averageInputId: 'prevention_program_average2' },
        { className: 'rating9', averageTextId: 'nutri_sensitive_average', averageInputId: 'nutri_sensitive_average2' }
    ];

    setups.forEach(setup => {
        const ratingSelects = document.querySelectorAll(`.${setup.className}`);
        ratingSelects.forEach(select => {
            select.addEventListener('change', () => {
                calculateAverage(setup.className, setup.averageTextId, setup.averageInputId);
            });
        });
    });
});



function updatePerformanceRating() {

    let total = 0;
    let count = 0;

    ['5a', '5b', '5c', '5d', '5e', '5f', '5g', '5h', '5i'].forEach(suffix => {
        var lncRating = parseFloat(document.getElementById(`performance-level-${suffix}`).innerText);
        const performanceRating = ((lncRating / 5) * 100).toFixed(2);
        
        if (!isNaN(performanceRating)) {
            total += parseFloat(performanceRating); // Use performanceRating here
            count++;
        }

        document.getElementById(`current-rating-${suffix}`).innerText = performanceRating; 
    });

    const average = count ? (total / count).toFixed(2) : 0;
    document.getElementById('performance-rating5').innerText = average;

}

document.addEventListener('DOMContentLoaded', function() {
    updatePerformanceRating();
});


// personnel Directory tabs
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab');
    const contents = document.querySelectorAll('.tab-content');

    // Function to deactivate all tabs and contents
    function deactivateAll() {
        tabs.forEach(tab => tab.classList.remove('active'));
        contents.forEach(content => content.classList.remove('active'));
    }

    // Function to activate the clicked tab and corresponding content
    function activateTab(tab) {
        const targetContentId = tab.getAttribute('data-tab');
        const targetContent = document.getElementById(targetContentId);

        tab.classList.add('active');
        targetContent.classList.add('active');
    }

    // Initialize by activating the first tab
    if (tabs.length > 0) {
        activateTab(tabs[0]);
    }

    // Add click event listeners to each tab
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            deactivateAll();
            activateTab(tab);
        });
    });
});


// calculate age for NAO
document.getElementById('inputBdate').addEventListener('change', function() {
    let birthdate = this.value;
    let age = calculateAge(birthdate);
    
    var ages = document.getElementById('inputage').value = age;
    console.log("ages: ", ages);
});

function calculateAge(birthdate) {
    let birthDate = new Date(birthdate);
    let today = new Date();
    
    let age = today.getFullYear() - birthDate.getFullYear();
    
    let monthDifference = today.getMonth() - birthDate.getMonth();
    if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    
    return age;
}


// Calculate age for NPC
document.getElementById('inputNpcBdate').addEventListener('change', function() {
    let birthdate = this.value;
    let age = calculateAge(birthdate);
    
    var ages = document.getElementById('inputNpcAge').value = age;
    console.log("ages: ", ages);
});

function calculateAge(birthdate) {
    let birthDate = new Date(birthdate);
    let today = new Date();
    
    let age = today.getFullYear() - birthDate.getFullYear();
    
    let monthDifference = today.getMonth() - birthDate.getMonth();
    if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    
    return age;
}


// Calculate age for BNS
document.getElementById('inputBnsBdate').addEventListener('change', function() {
    let birthdate = this.value;
    let age = calculateAge(birthdate);
    
    var ages = document.getElementById('inputBnsAge').value = age;
    console.log("ages: ", ages);
});

function calculateAge(birthdate) {
    let birthDate = new Date(birthdate);
    let today = new Date();
    
    let age = today.getFullYear() - birthDate.getFullYear();
    
    let monthDifference = today.getMonth() - birthDate.getMonth();
    if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    
    return age;
}