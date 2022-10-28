window._ = require('lodash');




import 'bootstrap'
import 'select2'

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

require('./components/Delete')
require('./components/Create')
