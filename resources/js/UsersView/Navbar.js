import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter, useLocation } from "react-router-dom";
import { Link } from "react-router-dom";

function Navbar() {
    const [isNavOpen, setIsNavOpen] = useState(false);
    const [width, setWidth] = useState(window.innerWidth);

    useEffect(() => {
        window.addEventListener("resize", () => {
            setWidth(window.innerWidth);
        });
    }, []);

    const closeNav = () => {
        setIsNavOpen(false);
    };

    // const location = useLocation();

    // const [nav, setNav] = useState(null);

    // useEffect(() => {
    //     const location_path = location.pathname;
    //     const path = location_path.slice(location_path.lastIndexOf("/"));

    //     setNav(path);

    //     return () => {
    //         setNav(null);
    //     };
    // }, [location.pathname]);

    // const navs = [
    //     {
    //         href: "/",
    //         label: "Home",
    //     },
    //     {
    //         href: "/events",
    //         label: "Events",
    //     },
    //     {
    //         href: "/about-us",
    //         label: "About Us",
    //     },
    //     {
    //         href: "/admin",
    //         label: "Admin",
    //     },
    // ];

    // stick the navbar to the top:
    //
    // window.onscroll = function () {
    //     myFunction();
    // };

    // // Get the navbar
    // const navbar = document.querySelector(".user__navbar");

    // // Get the offset position of the navbar
    // const sticky = navbar.offsetTop;

    // // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    // function myFunction() {
    //     if (window.pageYOffset >= sticky) {
    //         navbar.classList.add("sticky");
    //     } else {
    //         navbar.classList.remove("sticky");
    //     }
    // }

    return (
        // <nav className="user__navbar">
        //     <a href="/" className="navbar__logo-link">
        //         <img src="/images/logo_white.png" alt="lesbotoc logo" />
        //     </a>
        //     <div className="navbar-links">
        //         {navs.map((element, index) => (
        //             <a
        //                 key={index}
        //                 className={
        //                     "link " +
        //                     (nav === element.href ? "link-active" : "")
        //                 }
        //                 href={element.href}
        //             >
        //                 {element.label}
        //             </a>
        //         ))}
        //     </div>
        // </nav>
        <header className="navigation">
            <a
                onClick={(e) => {
                    e.preventDefault();
                    setIsNavOpen(!isNavOpen);
                }}
                className="navigation__link icon"
                href="#"
            >
                <i className="fa-solid fa-bars"></i>

                <i className="fa-thin fa-abacus"></i>
            </a>

            <nav className="navigation__top">
                <li className="navigation__item--logo">
                    <a href="/" className="navbar__logo-link">
                        <img src="/images/logo_white.png" alt="lesbotoc logo" />
                    </a>
                </li>
                <ul
                    className={
                        isNavOpen
                            ? width >= 600
                                ? "navigation__links"
                                : "navigation__links expanded"
                            : "navigation__links"
                    }
                >
                    <li className="navigation__item">
                        <a
                            onClick={closeNav}
                            className="navigation__link"
                            href="/"
                        >
                            HOME
                        </a>
                    </li>
                    <li className="navigation__item">
                        <a
                            onClick={closeNav}
                            className="navigation__link"
                            href="/events"
                        >
                            EVENTS
                        </a>
                    </li>
                    <li className="navigation__item">
                        <a
                            onClick={closeNav}
                            className="navigation__link"
                            href="/about-us"
                        >
                            ABOUT US
                        </a>
                    </li>
                    <li className="navigation__item">
                        <a
                            onClick={closeNav}
                            className="navigation__link"
                            href="/admin"
                        >
                            ADMIN
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
    );
}

export default Navbar;
