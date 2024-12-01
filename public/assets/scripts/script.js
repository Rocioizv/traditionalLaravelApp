


(function () {

    let tablaPokemon = document.getElementById('tablaPokemon');
    let tablaFurniture = document.getElementById('tablaFurniture');
    let tablaProducto = document.getElementById('tablaProducto');
    
    if (tablaProducto) {
        tablaProducto.addEventListener('click', clickTable);
    }
    
    if (tablaFurniture) {
        tablaFurniture.addEventListener('click', clickTable);
    }


    if (tablaPokemon) {
        tablaPokemon.addEventListener('click', clickTable);
    }


    function clickTable(event) {
        const formDelete = document.getElementById('formDelete');
        let target = event.target;

        if(target.tagName === 'A' && target.getAttribute('class') === 'borrar') {
            event.preventDefault();  
            if(confirm('¿Estás seguro de que quieres eliminarlo?')) {
                let url = target.dataset.href;
                formDelete.action = url;
                formDelete.submit();
            }
        }
    }

})();
