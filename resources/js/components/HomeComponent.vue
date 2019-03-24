<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Componente!</div>
                    <div class="card-body">
                        <div class="btn-group dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownTeamButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ selectedTeam }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownTeamButton">
                                <a class="dropdown-item" v-for="team in teams"  v-on:click="selectTeam(team)" href="#">{{ team.name }}</a>
                            </div>
                        </div>
                        <div class="btn-group dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownUserButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ selectedUser }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownUserButton">
                                <a class="dropdown-item" v-for="user in users"  v-on:click="selectUser(user)" href="#">{{ user.name }}</a>
                            </div>
                        </div>

                        <br><br>
                        <datatable :api-url="url"></datatable>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import Datatable from './Datatable'

    export default {

        components:{
            Datatable
        },
        created(){
            let uri = this.apiUrl+'/api/teams';
            this.axios.get(uri).then(response => {
                this.teams = response.data;
            });
        },
        mounted(){
        },
        data(){
            return{
                selectedTeam:"Equipo",
                selectedUser:"Usuario",
                teams:{},
                users:{},
                clients:{},
                url:"",
                apiUrl:window.location.origin,
            }
        },
        methods:{

            selectUser(user){
                this.selectedUser = user.name;
                this.url = this.apiUrl+'/api/users/'+user.id+'/clients';
                //this.url = "https://vuetable.ratiw.net/api/users";
            },
            selectTeam(team){
                this.selectedTeam = team.name;
                let uri = this.apiUrl+'/api/teams/'+team.id+'/users';
                this.axios.get(uri).then(response => {
                    this.users = response.data;
                });
            }
        }

    }
</script>


<style>
    #app {
        font-family: 'Avenir', Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
        margin-top: 60px;
    }
</style>
