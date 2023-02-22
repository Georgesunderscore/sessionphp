// export default 
// export default 
class Reactnav extends React.Component {
    constructor(props){
        super(props);
    }

    render() {
        return (
            <Navbar inverse fluid >
{/*         
            <Navbar.Header>
                <Navbar.Brand>
                <a href="#">Brand</a>
                </Navbar.Brand>
                <Navbar.Toggle />
            </Navbar.Header> */}
        
            <Navbar.Collapse>
                <Nav>
                <NavItem eventKey={1} href={this.props.url1}>{this.props.menu1}</NavItem>
                <NavItem eventKey={1} href={this.props.url1}>{this.props.menu1}</NavItem>
                </Nav>
            </Navbar.Collapse>
        
            </Navbar>
        )}
        
}
