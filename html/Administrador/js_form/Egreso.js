document.addEventListener("DOMContentLoaded", function () {
    // Obtener los datos de egresos del almacenamiento local
    var expenses = JSON.parse(localStorage.getItem('expenses')) || [];

    // Obtener el cuerpo de la tabla
    var egresosBody = document.getElementById('egresosBody');

    // Lógica para agregar un nuevo egreso
    function addExpense(person, name, description, quantity, date, cost) {
        var newID = generateUniqueID(); // Generar un nuevo ID único
        var newExpense = {
            id: newID,
            person: person,
            name: name,
            description: description,
            quantity: quantity,
            date: date,
            cost: cost
        };
        expenses.push(newExpense); // Agregar el nuevo egreso al array de egresos
        localStorage.setItem('expenses', JSON.stringify(expenses)); // Actualizar el almacenamiento local
        renderExpensesTable(); // Volver a renderizar la tabla después de agregar el nuevo egreso
    }

    // Lógica para manejar el envío del formulario de ingreso de egresos
    function handleExpenseFormSubmit() {
        var person = document.getElementById('personN').value;
        var name = document.getElementById('nombreE').value;
        var description = document.getElementById('description').value;
        var quantity = document.getElementById('cantidad').value;
        var date = document.getElementById('fecha').value;
        var cost = document.getElementById('costo').value;

        addExpense(person, name, description, quantity, date, cost); // Llamar a la función para agregar el nuevo egreso
    }

    function renderExpensesTable() {
        // Limpiar el contenido existente en el cuerpo de la tabla
        egresosBody.innerHTML = '';

        // Iterar sobre los datos de egresos y agregar filas a la tabla
        expenses.forEach(function (expense) {
            var totalCost = expense.quantity * expense.cost; // Calcular el costo total

            var row = `<tr>
                <td>${expense.id}</td>
                <td>${expense.person}</td>
                <td>${expense.name}</td>
                <td>${expense.description}</td>
                <td>${expense.quantity}</td>
                <td>${expense.date}</td>
                <td>${expense.cost}</td>
                <td>${totalCost.toFixed(2)}</td>
                
            </tr>`;
            egresosBody.innerHTML += row;
        });

        // Calcular el valor total de los egresos y mostrarlo en el lugar adecuado
        var total = calcularValorTotal();
        document.getElementById('totalCosto').textContent = total;
    }

    // Función para calcular el valor total de los egresos
    function calcularValorTotal() {
        var total = 0;
        expenses.forEach(function (expense) {
            total += expense.quantity * expense.cost;
        });
        return total;
    }

    // Renderizar la tabla de egresos al cargar la página
    renderExpensesTable();
});

function limitInputLength(element, maxLength) {
    if (element.value.length > maxLength) {
        element.value = element.value.slice(0, maxLength);
    }
}

document.addEventListener("DOMContentLoaded", function () {
    var today = new Date().toISOString().split('T')[0];
    document.getElementById('fecha').setAttribute('max', today);
});

// En tu archivo JavaScript
/* window.addEventListener('beforeunload', function (e) {
    localStorage.removeItem('expenses'); // Borra la información de gastos al cerrar la pestaña
}); */

/* 2 */

$(document).ready(function () {
    /*Mostrar ocultar area de notificaciones*/
    $('.btn-Notification').on('click', function () {
        var ContainerNoty = $('.container-notifications');
        var NotificationArea = $('.NotificationArea');
        if (NotificationArea.hasClass('NotificationArea-show') && ContainerNoty.hasClass('container-notifications-show')) {
            NotificationArea.removeClass('NotificationArea-show');
            ContainerNoty.removeClass('container-notifications-show');
        } else {
            NotificationArea.addClass('NotificationArea-show');
            ContainerNoty.addClass('container-notifications-show');
        }
    });
    /*Mostrar ocultar menu principal*/
    $('.btn-menu').on('click', function () {
        var navLateral = $('.navLateral');
        var pageContent = $('.pageContent');
        var navOption = $('.navBar-options');
        if (navLateral.hasClass('navLateral-change') && pageContent.hasClass('pageContent-change')) {
            navLateral.removeClass('navLateral-change');
            pageContent.removeClass('pageContent-change');
            navOption.removeClass('navBar-options-change');
        } else {
            navLateral.addClass('navLateral-change');
            pageContent.addClass('pageContent-change');
            navOption.addClass('navBar-options-change');
        }
    });
    /*Salir del sistema*/
    $('.btn-exit').on('click', function () {
        swal({
            title: 'You want out of the system?',
            text: "The current session will be closed and will leave the system",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, exit',
            closeOnConfirm: false
        },
            function (isConfirm) {
                if (isConfirm) {
                    window.location = 'index.html';
                }
            });
    });
    /*Mostrar y ocultar submenus*/
    $('.btn-subMenu').on('click', function () {
        var subMenu = $(this).next('ul');
        var icon = $(this).children("span");
        if (subMenu.hasClass('sub-menu-options-show')) {
            subMenu.removeClass('sub-menu-options-show');
            icon.addClass('zmdi-chevron-left').removeClass('zmdi-chevron-down');
        } else {
            subMenu.addClass('sub-menu-options-show');
            icon.addClass('zmdi-chevron-down').removeClass('zmdi-chevron-left');
        }
    });
});
(function ($) {
    $(window).load(function () {
        $(".navLateral-body, .NotificationArea, .pageContent").mCustomScrollbar({
            theme: "dark-thin",
            scrollbarPosition: "inside",
            autoHideScrollbar: true,
            scrollButtons: { enable: true }
        });
    });
})(jQuery);

$(document).ready(function () {
    $('.menu-principal li').click(function () {
        $(this).find('.submenu').toggleClass('active');
    });
});
