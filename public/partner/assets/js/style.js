
// Class definition
var KTDatatablesExample = function () {
    // Shared variables
    var table;
    var datatable;

    // Private functions
    var initDatatable = function () {
        // Set date data order
        const tableRows = table.querySelectorAll('tbody tr');

        tableRows.forEach(row => {
            const dateRow = row.querySelectorAll('td');
            const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT").format(); // select date from 4th column in table
            dateRow[3].setAttribute('data-order', realDate);
        });

        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            "info": false,
            'order': [],
            'pageLength': 10,
        });
    }


    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector('[data-kt-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
        });
    }

    // Public methods
    return {
        init: function () {
            table = document.querySelector('#kt_datatable_example1');

            if ( !table ) {
                return;
            }

            initDatatable();
            handleSearchDatatable();
        }
    };
}();


// Class definition
var KTDatatablesExample2 = function () {
    // Shared variables
    var table;
    var datatable;

    // Private functions
    var initDatatable = function () {
        // Set date data order
        const tableRows = table.querySelectorAll('tbody tr');

        tableRows.forEach(row => {
            const dateRow = row.querySelectorAll('td');
            const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT").format(); // select date from 4th column in table
            dateRow[3].setAttribute('data-order', realDate);
        });

        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            "info": false,
            'order': [],
            'pageLength': 10,
        });
    }


    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector('[data-kt-filter2="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
        });
    }

    // Public methods
    return {
        init: function () {
            table = document.querySelector('#kt_datatable_example2');

            if ( !table ) {
                return;
            }

            initDatatable();
            handleSearchDatatable();
        }
    };
}();

// Class definition
var KTDatatablesExample3 = function () {
    // Shared variables
    var table;
    var datatable;

    // Private functions
    var initDatatable = function () {
        // Set date data order
        const tableRows = table.querySelectorAll('tbody tr');

        tableRows.forEach(row => {
            const dateRow = row.querySelectorAll('td');
            const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT").format(); // select date from 4th column in table
            dateRow[3].setAttribute('data-order', realDate);
        });

        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            "info": false,
            'order': [],
            'pageLength': 10,
        });
    }


    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector('[data-kt-filter3="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
        });
    }

    // Public methods
    return {
        init: function () {
            table = document.querySelector('#kt_datatable_example3');

            if ( !table ) {
                return;
            }

            initDatatable();
            handleSearchDatatable();
        }
    };
}();

// Class definition
var KTDatatablesExample4 = function () {
    // Shared variables
    var table;
    var datatable;

    // Private functions
    var initDatatable = function () {
        // Set date data order
        const tableRows = table.querySelectorAll('tbody tr');

        tableRows.forEach(row => {
            const dateRow = row.querySelectorAll('td');
            const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT").format(); // select date from 4th column in table
            dateRow[3].setAttribute('data-order', realDate);
        });

        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            "info": false,
            'order': [],
            'pageLength': 10,
        });
    }


    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector('[data-kt-filter4="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
        });
    }

    // Public methods
    return {
        init: function () {
            table = document.querySelector('#kt_datatable_example4');

            if ( !table ) {
                return;
            }

            initDatatable();
            handleSearchDatatable();
        }
    };
}();


// Class definition
var KTDatatablesExample5 = function () {
    // Shared variables
    var table;
    var datatable;

    // Private functions
    var initDatatable = function () {
        // Set date data order
        const tableRows = table.querySelectorAll('tbody tr');

        tableRows.forEach(row => {
            const dateRow = row.querySelectorAll('td');
            const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT").format(); // select date from 4th column in table
            dateRow[3].setAttribute('data-order', realDate);
        });

        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            "info": false,
            'order': [],
            'pageLength': 10,
        });
    }


    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector('[data-kt-filter5="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
        });
    }

    // Public methods
    return {
        init: function () {
            table = document.querySelector('#kt_datatable_example5');

            if ( !table ) {
                return;
            }

            initDatatable();
            handleSearchDatatable();
        }
    };
}();


// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesExample.init();
    KTDatatablesExample2.init();
    KTDatatablesExample3.init();
    KTDatatablesExample4.init();
    KTDatatablesExample5.init();
});





function timePick(elem) {
    elem.flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });
}
let timep = document.querySelectorAll('.kt_timepicker');
for(let i=0; i<timep.length; i++) {
    timePick(timep[i]);
}





function timePickNew(elem) {
    new tempusDominus.TempusDominus(elem, {
        display: {
            viewMode: "clock",
            components: {
                decades: false,
                year: false,
                month: false,
                date: false,
                hours: true,
                minutes: true,
                seconds: false
            }
        }
    }); 
}
let timepnew = document.querySelectorAll('.kt_td_picker_time_only');
for(let i=0; i<timepnew.length; i++) {
    timePickNew(timepnew[i]);
}



function datePick(elem) {
    elem.flatpickr();
}
let datep = document.querySelectorAll('.kt_datepicker');
for(let i=0; i<datep.length; i++) {
    datePick(datep[i]);
}



function funcShow() {
    this.nextElementSibling.style.display="block";
    this.style.display="none";
}

function funcHide(e) {
    let inputTime = e.parentElement.querySelectorAll('.kt_td_picker_time_only > input');
    for(let i=0; i<inputTime.length; i++) {
        inputTime[i].value = '';
    }
    e.parentElement.parentElement.style.display="none";
    e.parentElement.parentElement.previousElementSibling.style.display="block";
}

let weekOff = document.querySelectorAll('.addweekoff');
for(let i=0; i<weekOff.length; i++) {
    weekOff[i].addEventListener("click", funcShow);
}


function funcShowDiv() {
    let activeRadio = document.querySelectorAll('[name="openhours"]');
    let activeDiv = document.querySelectorAll('.operatingdiv');

    for(let i=0; i<activeRadio.length; i++) {
        if(activeRadio[i].checked) {
            activeDiv[i].classList.add('active');
        }
        else {
            activeDiv[i].classList.remove('active');
        }
    }
}


var elements = Array.prototype.slice.call(document.querySelectorAll("[data-bs-stacked-modal]"));

if (elements && elements.length > 0) {
    elements.forEach((element) => {
        if (element.getAttribute("data-kt-initialized") === "1") {
            return;
        }

        element.setAttribute("data-kt-initialized", "1");

        element.addEventListener("click", function(e) {
            e.preventDefault();

            const modalEl = document.querySelector(this.getAttribute("data-bs-stacked-modal"));

            if (modalEl) {
                const modal = new bootstrap.Modal(modalEl);
                modal.show();
            }
        });
    });
}


// Format options
var optionFormat = function(item) {
    if ( !item.id ) {
        return item.text;
    }

    var span = document.createElement('span');
    var imgUrl = item.element.getAttribute('data-kt-select2-user');
    var template = '';

    template += '<img src="' + imgUrl + '" class="rounded-circle h-20px me-2" alt="image"/>';
    template += item.text;

    span.innerHTML = template;

    return $(span);
}

// Init Select2 --- more info: https://select2.org/
$('.kt_docs_select2_users').select2({
    templateSelection: optionFormat,
    templateResult: optionFormat
});
