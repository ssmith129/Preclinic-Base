import { Component } from '@angular/core';
import { routes } from '../../../../../src/app/shared/routes/routes';
import { RouterModule } from '@angular/router';

@Component({
  selector: 'app-expenses',
  templateUrl: './expenses.component.html',
  styleUrls: ['./expenses.component.scss'],
  imports:[RouterModule]
})
export class ExpensesComponent {
routes=routes
}
