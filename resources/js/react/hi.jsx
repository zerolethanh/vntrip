// var React = require('react');

var Hi = React.createClass({
    render:function() {
        return (
            <div>Hi</div>
        );
    }
});
ReactDOM.render(
	<Hi />,
	document.getElementById('hi')
);
// module.exports = Hi;