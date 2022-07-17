import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter, useLocation } from "react-router-dom";
import { Link } from "react-router-dom";

function Navbar() {
    const location = useLocation();

    const [nav, setNav] = useState(null);

    useEffect(() => {
        const location_path = location.pathname;
        const path = location_path.slice(location_path.lastIndexOf("/"));

        setNav(path);

        return () => {
            setNav(null);
        };
    }, [location.pathname]);

    const navs = [
        {
            href: "/",
            label: "Home",
        },
        {
            href: "/events",
            label: "Events",
        },
        {
            href: "/about-us",
            label: "About Us",
        },
    ];

    return (
        <nav className="user__navbar">
            <a href="/" className="navbar__logo-link">
                <img src="/images/logo_white.png" alt="lesbotoc logo" />
            </a>
            <div className="navbar-links">
                {navs.map((element, index) => (
                    <Link
                        key={index}
                        className={
                            "link " +
                            (nav === element.href ? "link-active" : "")
                        }
                        to={element.href}
                    >
                        {element.label}
                    </Link>
                ))}
                <Link to="/admin" className="link">
                    Admin Panel
                </Link>
            </div>
        </nav>
    );
}

export default Navbar;
