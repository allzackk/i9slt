import { joinInGroups, parseData } from '../../utils'


export default {
  namespaced: true,
  
  state: {
    items: [],
    isEmpty: true
  },
  
  mutations: {},
  
  actions: {
    async ['loadData']({state}){

      const id = '16bl-3geY9ri8LsowxhAZO5ZS8_UKUgAPR-ZtBdDdOeA'
      const url = `https://docs.google.com/spreadsheets/d/${id}/gviz/tq?tqx=out:json`
      
      state.items = await fetch(url)
        .then(res => res.text()).then(text => JSON.parse(text.substr(47).slice(0, -2)))
        .then(json => joinInGroups(parseData(json)))

      state.isEmpty = !!state.items.length
    },
  },
  gettets: {},
}