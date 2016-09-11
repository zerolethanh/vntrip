<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
	  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> --}}

	<style>
	
	</style>
</head>
<body>

<div id="app" >
		
	<input v-model="userInput">
	<span>@{{msg | concat userInput}}</span>
	</div>


<script>
// inject a handler for `myOption` custom option
Vue.mixin({
  created: function () {
    var myOption = this.$options.myOption
    if (myOption) {
      console.log(myOption)
    }
  }
})

var vm = new Vue({
  events: {
    'hook:created': function () {
      console.log('created!')
    },
    greeting: function (msg) {
      console.log(msg)
    },
    // can also use a string for methods
    bye: 'sayGoodbye'
  },
  methods: {
    sayGoodbye: function () {
      console.log('goodbye!')
    }
  }
}) // -> created!
vm.$emit('greeting', 'hi!') // -> hi!
vm.$emit('bye')             // -> goodbye!
// -> "hello!"
</script>
</body>
</html>