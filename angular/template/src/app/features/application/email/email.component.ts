import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { routes } from '../../../shared/routes/routes';
import { CommonModule } from '@angular/common';

@Component({
    selector: 'app-email',
    templateUrl: './email.component.html',
    styleUrls: ['./email.component.scss'],
    imports: [CommonModule,RouterLink]
})
export class EmailComponent  {
    routes=routes
show=false;
toggleMenu():void{
    this.show=!this.show
}
}
