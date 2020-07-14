const del = require('del')

module.exports = function clean(cb) {
  return del('assets').then(() => {
    cb()
  })
}
