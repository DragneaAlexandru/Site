function f1(r,b1)
			{
				for(i=0;i<=4;i++)
				{
					if(r[i].selected)
					{
						b1.value = r[i].value;
					}
				}
			}
			function f2(r,t1,t2,t3)
			{
				x=t1.value;
				x=parseFloat(x);
				y=t2.value;
				y=parseFloat(y);
				for(i=0;i<=4;i++)
				{
						if(r[i].selected)
						{
							op=r[i].value;
						}
				}
			
					switch(op)
				{
					case "+":
					{
					s=x+y;
					t3.value=s;
					}
					break;
					case "-":
					{
					s=x-y;
					t3.value=s;
					}
					break;
					case "*":
					{
					s=x*y;
					t3.value=s;
					}
					break;
					case "/":
					{
					s=x/y;
					t3.value=s;
					}
					break;
					case "^":
					{
						s=1;
						for(i=1;i<=y;i++)
							{
								s = s*x;
								t3.value=s;
							}
					//s=Math.pow(x,y);
					//t3.value=s;
					}
					break;
				}
			}
			
			function f3(q,t3)
			{
				q.value="";
				t3.value="";
			}