import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { routes } from '../../../../../src/app/shared/routes/routes';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-success',
  imports: [CommonModule,FormsModule],
  templateUrl: './success.component.html',
  styleUrl: './success.component.scss'
})
export class SuccessComponent {
 public routes = routes;
  constructor(private router:Router){
    
  }
  pageRedirect(){
    this.router.navigate([routes.loginCover])
  }
}
