//Pumpetype
$(function () {
    var availableTags = [
                "ALPHA2",
                "ALPHA3",
                "AMD",
                "APG",
                "BM",
                "Brandslukningsanlæg",
                "Brøndmontage",
                "CIM og CIU",
                "CM/CME/CMBE",
                "CMV",
           ];
    $("#pumpetype").autocomplete({
        source: availableTags
    });
});

//Serienumre
$(function () {
    var availableTags = [
                "521258 PN",
                "498641 PN",
                "423641 PN",
                "493426 PN",
                "465647 PN",
                "C493218 PN",
           ];
    $("#serienr").autocomplete({
        source: availableTags
    });
});

//adressevalg
$(function () {
    var availableTags = [
                "Ringvej Syd 104",
           ];
    $("#adresse").autocomplete({
        source: availableTags
    });
});

//datovælger
$(function () {
    $("#datovælger").datepicker({
        changeMonth: true,
        changeYear: true,
        showAnim: "drop",

    });
});
