const cLinks = document.querySelectorAll('.clink');

        function scrollToTable(event) {
            event.preventDefault(); // Prevent the default anchor behavior
            const tableId = this.getAttribute('data-table');
            const table = document.getElementById(tableId);
            
            if (table) {
                const tableRect = table.getBoundingClientRect();
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                const scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

                window.scrollTo({
                    top: tableRect.top + scrollTop - (window.innerHeight - tableRect.height) / 2,
                    left: tableRect.left + scrollLeft - (window.innerWidth - tableRect.width) / 2,
                    behavior: 'smooth'
                });
            }
        }

        cLinks.forEach(link => {
            link.addEventListener('click', scrollToTable);
        });



        const sr = new ScrollReveal ({
            distance: '40px',
            duration: '1500',
            reset: false
        
        })
        
        sr.reveal('.table1' , {delay: 100 , origin: 'right'});
        sr.reveal('.table2' , {delay: 100 , origin: 'left'});