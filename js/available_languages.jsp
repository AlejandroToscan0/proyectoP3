










AUI.add(
	'portal-available-languages',
	function(A) {
		var available = {};

		var direction = {};

		

			available['es_MX'] = 'español (México)';
			direction['es_MX'] = 'ltr';

		

			available['fr_FR'] = 'francés (Francia)';
			direction['fr_FR'] = 'ltr';

		

			available['ar_SA'] = 'árabe (Arabia Saudita)';
			direction['ar_SA'] = 'rtl';

		

			available['en_US'] = 'inglés (Estados Unidos)';
			direction['en_US'] = 'ltr';

		

			available['pt_BR'] = 'portugués (Brasil)';
			direction['pt_BR'] = 'ltr';

		

		Liferay.Language.available = available;
		Liferay.Language.direction = direction;
	},
	'',
	{
		requires: ['liferay-language']
	}
);