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

