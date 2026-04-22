$(document).ready(function() {

            var table = $('#tablaEmpleados').DataTable({
                pageLength: 15,
                searching: false,
                scrollX: false,
                autoWidth: false,
                dom: 'tip',
                ordering: false,
                language: {
                    info: "",
                    zeroRecords: "No se encontraron resultados",
                    infoEmpty: "",
                    paginate: {
                        previous: "<<",
                        next: ">>"
                    }
                },
                columnDefs: [{
                    orderable: false,
                    targets: 0
                }],
                order: [
                    [1, 'asc']
                ],
                select: true
            });

            table.on('order.dt search.dt draw.dt', function() {
                let pageInfo = table.page.info();

                table.column(0, {
                    page: 'current'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1 + pageInfo.start;
                });
            }).draw();



        });