import { Container, Nav, Navbar } from "react-bootstrap";

const Header = () => {
    return(
        <Navbar collapseOnSelect expand="lg">
            <Container>
                <Navbar.Brand href="/">Soni Saini</Navbar.Brand>
                <Navbar.Toggle aria-controls="responsive-navbar-nav" />
                <Navbar.Collapse id="responsive-navbar-nav">
                    <Nav className="ms-auto">
                        <Nav.Link href="#about">About</Nav.Link>
                        <Nav.Link href="#services">Services</Nav.Link>
                    </Nav>
                </Navbar.Collapse>
            </Container>
        </Navbar>
    )
}

export default Header;