<template>
    <div class="ui container">
        <vuetable ref="vuetable"
                  :api-url=apiUrl
                  pagination-path=""
                  :fields="fields"
                  @vuetable:pagination-data="onPaginationData"
        ></vuetable>
        <vuetable-pagination ref="pagination"
                             @vuetable-pagination:change-page="onChangePage"
        ></vuetable-pagination>

    </div>

</template>

<script>
    import Vuetable from 'vuetable-2/src/components/Vuetable'
    import VuetablePagination from 'vuetable-2/src/components/VuetablePagination'

    export default {
        components: {
            Vuetable,
            VuetablePagination

        },
        props: ['apiUrl'],
        methods: {
            onPaginationData (paginationData) {
                this.$refs.pagination.setPaginationData(paginationData)
            },
            onChangePage (page) {
                this.$refs.vuetable.changePage(page)
            }
        },
        data(){
          return{
              fields:[
                  {
                      name:"email",
                      sortField: "email"
                  }
              ]
          }
        }

    }
</script>