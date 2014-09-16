<form>
    <fieldset>
        <legend>{{ formTitle }}</legend>
        <div class="row"> 
            <label>Nombre</label>
            <input type="text" required placeholder="Introduce un nombre..." ng-model="user.username" />
 
             <label>Password</label>
             <input type="password" required placeholder="Introduce un password..." ng-model="user.password" />
 
             <button ng-click="actionAuth(user)" type="submit" class="button radius large-12 columns">
                {{ formAction }}
            </button>
            <button ng-click="redirect()" class="button radius secondary large-12 columns">
                {{ formSecondButton }}
            </button>
        </div>
    </fieldset>
</form>