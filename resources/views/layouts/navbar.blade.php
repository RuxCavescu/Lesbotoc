    <nav class="navbar">
        <a href="/admin" class="navbar__logo-link">
            <img src="/images/logo_white.png" alt="lesbotoc logo">
        </a>
        <div class="navbar-links">
            <a href="/admin" class="link">Home</a>
            <a href="/admin/events" class="link">Events</a>
            <a href="/admin/contacts" class="link">Contacts</a>
            <a href="/admin/locations" class="link">Locations</a>
        </div>
    </nav>
    

    <script>

        const navbar = document.querySelector(".navbar");
        // Loop through the links and add the active class to the current/clicked button

        window.addEventListener("load", () => {

            const location_path = window.location.pathname
            const path = location_path.slice(location_path.lastIndexOf('/'))
            
            // Get all buttons with class="link" inside the navbar
            const links = navbar.querySelectorAll(".link");

            for (var i = 0; i < links.length; i++) {

                const link = links[i]
                const hrefAttr = link.href
                const hrefTrigger = hrefAttr.slice(hrefAttr.lastIndexOf('/'))

                if (hrefTrigger === path ) {
                    link.classList.add('link-active')
                }

                // console.log(path, hrefTrigger)
            
            }
            
        })
        
    </script>