import { Component } from '@angular/core';
import { routes } from '../../../../../../src/app/shared/routes/routes';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-permission',
  templateUrl: './permission.component.html',
  styleUrls: ['./permission.component.scss'],
  imports:[CommonModule,RouterLink]
})
export class PermissionComponent {
routes=routes
}
