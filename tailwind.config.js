/** @type {import('tailwindcss').Config} */
export default {
 content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    
  ],
  theme: {
    extend: {
        backgroundImage: {
        'custom-gradient': 'linear-gradient(15deg, rgba(221,241,179,1) 22%, rgba(237,200,54,1) 100%)',
       },
    },
     colors: {
      'orange' :'#EC8F5E',
      'dark-green' :'#347928',
      'gray-text' :'#A8A4AA',
      'gray-bg' :'#F5F5F5',
      'orange-text' : '#FF725E',
      'yellow' : '#FFD52D',
      'dark-blue' : '#10375C',
      'dark-gray' :'#D9D9D9',
      'green' :'#C1CFA1',
      'white' : '#FFFFFF',
      'yellow-foot': '#FFEDA5',
      'bg-mobile' : '#F3C623',
      'link':'#697565'
    },
     fontFamily: {
      'roboto': ['Roboto', 'sans-serif'],
    }
  },
 plugins: [
    require('tailwindcss-animated')
  ],
}

