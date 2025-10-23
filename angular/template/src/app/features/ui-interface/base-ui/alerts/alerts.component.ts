import { Component } from '@angular/core';
import { routes } from '../../../../../../src/app/shared/routes/routes';
import { CommonModule } from '@angular/common';

@Component({
    selector: 'app-alerts',
    templateUrl: './alerts.component.html',
    styleUrls: ['./alerts.component.scss'],
    imports: [CommonModule]
})
export class AlertsComponent {
  public routes = routes;

}
