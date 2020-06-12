
void(vector <int> array)
{
	for (int i = 0; i < array.length(); i++)
	{
		if (array[i] == 0)
		{
			for (int j = i; j < array.length(); j++)
			{
				array[j] = array[j + 1];
			}
			array.resize(array.length());
		}
	}
}