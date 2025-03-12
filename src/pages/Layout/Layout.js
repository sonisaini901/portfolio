import Header from "./Header/Header";

const { Outlet } = require("react-router-dom")

const Layout = () => {
    return(
        <>
            <Header />

            <Outlet />
        </>
        
    )
}

export default Layout;