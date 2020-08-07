// https://vuex.vuejs.org/en/modules.html
import order from './order'
import stage from './stage'

const requireModule = require.context('.', true, /\.js$/)
const modules = {
    order,
    stage,
};

requireModule.keys().forEach(fileName => {
    if (fileName === './index.js') return

    // Replace ./ and .js
    const path = fileName.replace(/(\.\/|\.js)/g, '')
    const [moduleName, imported] = path.split('/')

    if (!modules[moduleName]) {
        modules[moduleName] = {
            namespaced: true
        }
    }

    modules[moduleName][imported] = requireModule(fileName).default
})

export default modules
