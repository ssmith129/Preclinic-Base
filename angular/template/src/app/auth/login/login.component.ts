import { CommonModule } from '@angular/common';
import { Component} from '@angular/core';
  import { Router, RouterLink } from '@angular/router';
import { routes } from '../../../../src/app/shared/routes/routes';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

@Component({
    selector: 'app-login',
    templateUrl: './login.component.html',
    styleUrls: ['./login.component.scss'],
    imports: [CommonModule,FormsModule,RouterLink],
})
export class LoginComponent {
  public routes = routes;
  public passwordClass = false;
  togglePassword() {
    this.passwordClass = !this.passwordClass;
  }
  constructor(private router:Router){
    
  }
  pageRedirect(){
    this.router.navigate([routes.index])
  }
}
