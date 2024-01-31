
          var sections = document.getElementsByClassName('section');
        var links = document.querySelectorAll('.sidebar ul li a');

        for (var i = 0; i < links.length; i++) {
            links[i].addEventListener('click', function (e) {
                e.preventDefault();
                var marca = this.getAttribute('href');
                for (var j = 0; j < sections.length; j++) {
                    sections[j].style.display = 'none';
                }
                document.querySelector(marca).style.display = 'block';
            });
        }