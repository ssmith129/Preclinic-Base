import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { routes } from '../../../../../../src/app/shared/routes/routes';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-language-settings-2',
  templateUrl: './language-settings-2.component.html',
  styleUrls: ['./language-settings-2.component.scss'],
  imports: [CommonModule,RouterLink]
})
export class LanguageSettings2Component {
routes=routes
}
