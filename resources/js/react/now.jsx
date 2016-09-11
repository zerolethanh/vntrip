//helloworld
var HelloWorld = React.createClass({
	  render: function() {
	    return (
	      <p>
	        Hello, <input type="text" placeholder="Your name here" />!
	        It is {this.props.date.toTimeString()}
	      </p>
	    );
	  }
	});

	setInterval(function() {
	  ReactDOM.render(
	    <HelloWorld date={new Date()} />,
	    document.getElementById('example')
	  );
	}, 500);

//Hi
	var Hi = React.createClass({
    render(){
        return (
            <div>Hi {this.props.name} </div>
        );
    }
	});
	ReactDOM.render(
		<Hi name='le thanh'/>,
		document.getElementById('hi')
	);
	// module.exports = Hi;